using System.Collections;
using System.Collections.Generic;
using UnityEngine;



public class MatchmakingManager : MonoBehaviour
{
    [SerializeField]
    public bool matchMakingCheckDone = false;



    public void startCheckingMatchMakingStatus() {

        //Debug.Log("startCheckingMatchMakingStatus");
        GameObject.FindGameObjectWithTag("NetworkManager").GetComponent<NetworkManager>().matchmakingCheckQueueStatus();



    }

    
}
