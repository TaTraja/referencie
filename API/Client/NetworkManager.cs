using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.Networking;

public class NetworkManager : MonoBehaviour
{
    //LOGIN PART

    public void CheckLoginData(string login, string password) => StartCoroutine(CheckLoginData_Coroutine(login, password));

    //MATCHMAKING PART


    public void matchmakingAddMeToQueue() => StartCoroutine(matchmakingAddMeToQueue_Coroutine());

    public void matchmakingCheckQueueStatus() => StartCoroutine(matchmakingCheckQueueStatus_Coroutine());


    

    IEnumerator CheckLoginData_Coroutine(string login, string password)
    {
        // outputArea.text = "Loading...";
        //string uri = "https://rps.altarpictures.com/api/matchmaking/add_me_to_queue/45245";
        string uri = "https://rps.altarpictures.com/api/user-management/login/" + login + "/" + password;
        using (UnityWebRequest request = UnityWebRequest.Get(uri))
        {
            yield return request.SendWebRequest();
            if (request.isNetworkError || request.isHttpError)
            {
                Debug.Log(request.error);

            }

            else {

                int success_state = GameObject.FindGameObjectWithTag("UserManager").GetComponent<UserManager>().ReceiveUserInfo(GameObject.FindGameObjectWithTag("NetworkManager").GetComponent<JSONParser>().translateLoginResponse(request.downloadHandler.text), login);

                if (success_state != 0){
                    GameObject.FindGameObjectWithTag("MenuManager").GetComponent<Michsky.UI.FieldCompleteMainMenu.LoginUserManager>().LetUsIn();

                }
                else {
                    GameObject.FindGameObjectWithTag("MenuManager").GetComponent<Michsky.UI.FieldCompleteMainMenu.LoginUserManager>().Error();
                }
            }
                
        }
    }



    //MATCHMAKING

    IEnumerator matchmakingAddMeToQueue_Coroutine()
    {

        int userID = GameObject.FindGameObjectWithTag("UserManager").GetComponent<UserManager>().playerID;
        // outputArea.text = "Loading...";
        //string uri = "https://rps.altarpictures.com/api/matchmaking/add_me_to_queue/45245";
        string uri = "https://rps.altarpictures.com/api/matchmaking/add_me_to_queue/" + userID;
        using (UnityWebRequest request = UnityWebRequest.Get(uri))
        {
            yield return request.SendWebRequest();
            if (request.isNetworkError || request.isHttpError)
            {
                Debug.Log(request.error);

            }

          

        }
    }



    IEnumerator matchmakingCheckQueueStatus_Coroutine()
    {
        int userID = GameObject.FindGameObjectWithTag("UserManager").GetComponent<UserManager>().playerID;
        string uri = "https://rps.altarpictures.com/api/matchmaking/check-status/" + userID;
        
        while (GameObject.FindGameObjectWithTag("MatchmakingManager").GetComponent<MatchmakingManager>().matchMakingCheckDone == false) {

       // Debug.Log("matchmakingCheckQueueStatus_Coroutine: matchMakingCheckDone =  FALSE");
        
        using (UnityWebRequest request = UnityWebRequest.Get(uri))
        {
            yield return request.SendWebRequest();
            if (request.isNetworkError || request.isHttpError)
            {
                Debug.Log(request.error);

            }

            else
            {
               string  success_state = GameObject.FindGameObjectWithTag("NetworkManager").GetComponent<JSONParser>().translateMatchmakingStatus(request.downloadHandler.text);
                    //  bool success_state = GameObject.FindGameObjectWithTag("MatchmakingManager").GetComponent<MatchmakingManager>().matchMakingCheckDone;

                    if (success_state == "in_queue")
                    {
                        //Debug.Log("still in queue..");

                    }
                    else if (success_state == "nowhere") {
                        //Debug.Log("zatial si v medzipriestore..");
                    }
                    else
                    {
                        GameObject.FindGameObjectWithTag("MatchmakingManager").GetComponent<MatchmakingManager>().matchMakingCheckDone = true;
                        GameObject.FindGameObjectWithTag("ModalWindowsManager").GetComponent<ModalWindowsManager>().matchSearchChangeText("OPONENT N¡JDEN›, SP⁄äçAM HRU");
                        GameObject.FindGameObjectWithTag("ModalWindowsManager").GetComponent<ModalWindowsManager>().matchSearchNotificationOut();
                        GameObject.FindGameObjectWithTag("MultiplayerGameManager").GetComponent<MultiplayerGameManager>().InitiateGameBoard();
                        

                        GameObject.FindGameObjectWithTag("MainMenuParent").transform.GetChild(8).GetChild(3).GetChild(1).gameObject.GetComponent<FadeBG>().desiredAlpha = 1f;
                        GameObject.FindGameObjectWithTag("MainMenuParent").transform.GetChild(8).GetChild(3).GetChild(1).gameObject.GetComponent<CanvasGroup>().blocksRaycasts = true;

                        Debug.Log("gameID = " + success_state);
                    }
                }
         yield return new WaitForSeconds(2f);
        }
    }

}


    //GAME SETUP

    public void gameSetup_setFlagAndTrapPosition(string flagPosition, string trapPosition, bool youArePlayer, bool youAreOpponent,int playerID, string gameID) => StartCoroutine(gameSetup_setFlagAndTrapPosition_Coroutine(flagPosition,trapPosition,youArePlayer,youAreOpponent,playerID,gameID));

    IEnumerator gameSetup_setFlagAndTrapPosition_Coroutine(string flagPosition, string trapPosition, bool youArePlayer, bool youAreOpponent,int playerID, string gameID)
    {
        string playerTYPE = "";
        if (youArePlayer) {
            playerTYPE = "player";
        } else if (youAreOpponent) {
            playerTYPE = "opponent";
        }

        // outputArea.text = "Loading...";
        //string uri = "https://rps.altarpictures.com/api/matchmaking/add_me_to_queue/45245";
        string uri = "https://rps.altarpictures.com/api/setup/set_trap_and_flag_positions/" + playerID + "/" + playerTYPE + "/" +  flagPosition +  "/" + trapPosition + "/" + gameID;
        using (UnityWebRequest request = UnityWebRequest.Get(uri))
        {
            yield return request.SendWebRequest();
            if (request.isNetworkError || request.isHttpError)
            {
                //Debug.Log(request.error);
                Debug.Log(uri);

            }

            else
            {
                Debug.Log(request.downloadHandler.text);
                GameObject.FindGameObjectWithTag("MultiplayerGameManager").GetComponent<MultiplayerGameManager>().getPiecesPositions();
            }

        }
    }


    public void gameSetup_getPiecesPositions(string gameID, string playerTYPE, string flagPosition, string trapPosition) => StartCoroutine(gameSetup_getPiecesPositions_Coroutine(gameID, playerTYPE, flagPosition, trapPosition));

    IEnumerator gameSetup_getPiecesPositions_Coroutine(string gameID, string playerTYPE, string flagPosition, string trapPosition)
    {

        string uri = "https://rps.altarpictures.com/api/setup/request_pieces_positions/" + gameID + "/" + playerTYPE + "/" + flagPosition + "/" + trapPosition;
        using (UnityWebRequest request = UnityWebRequest.Get(uri))
        {
            yield return request.SendWebRequest();
            if (request.isNetworkError || request.isHttpError)
            {
                //Debug.Log(request.error);
                Debug.Log(uri);

            }

            else
            {
                //Debug.Log(request.downloadHandler.text);

                GetComponent<JSONParser>().translateStartingPositions(request.downloadHandler.text);
            }

        }
    }

    //GAMEPLAY

    public void GetTileState(string gameID, string playerTYPE, string selectedPlayerPieceType, string newTileMovement) => StartCoroutine(GetTileState_Coroutine(gameID, playerTYPE, selectedPlayerPieceType, newTileMovement));


    IEnumerator GetTileState_Coroutine(string gameID, string playerTYPE, string selectedPlayerPieceType, string newTileMovement)
    {

        string uri = "https://rps.altarpictures.com/api/gameplay/request-tile-state/" + gameID + "/" + playerTYPE + "/" + selectedPlayerPieceType + "/" + newTileMovement;
        using (UnityWebRequest request = UnityWebRequest.Get(uri))
        {
            yield return request.SendWebRequest();
            if (request.isNetworkError || request.isHttpError)
            {
                //Debug.Log(request.error);
                Debug.Log(uri);

            }

            else
            {
                //Debug.Log(request.downloadHandler.text);

             string responseString =  GetComponent<JSONParser>().translateTileState(request.downloadHandler.text);
             Debug.Log(responseString);
            }

        }
    }

}
