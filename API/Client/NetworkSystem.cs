using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.Networking;

public class NetworkSystem : MonoBehaviour
{
    // Start is called before the first frame update
    void Start()
    {
        GetData();
    }


    void GetData() => StartCoroutine(GetData_Coroutine());

    IEnumerator GetData_Coroutine()
    {
        // outputArea.text = "Loading...";
        //string uri = "https://rps.altarpictures.com/api/matchmaking/add_me_to_queue/45245";
        string uri = "https://rps.altarpictures.com/api/matchmaking/check-status/45245";
        using (UnityWebRequest request = UnityWebRequest.Get(uri))
        {
            yield return request.SendWebRequest();
            if (request.isNetworkError || request.isHttpError)
                Debug.Log(request.error);
            else
                Debug.Log(request.downloadHandler.text);
        }
    }

    // Update is called once per frame
    void Update()
    {
        
    }
}
