using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class GameManager : MonoBehaviour
{


    public GameObject motor;
    public GameObject skin;
    public bool gameplay = false;
    public bool gameover = false;
    public string levelType = "";


    // Start is called before the first frame update
    void Start()
    {
  
        motor = GameObject.Find("motor");
        skin = GameObject.FindGameObjectWithTag("Player");



    }

    public void StartLevel(string levelType) {

        GameObject.Find("StatsManager").GetComponent<PlayerStatsManager>().ApplyCurrentStatsToGame(levelType);

        this.levelType = levelType;
        GameObject.Find("LevelGenerator").GetComponent<LevelGenerator>().GenerateNewTile();
        motor.GetComponent<Rigidbody>().isKinematic = false;
        gameplay = true;
    }

    void Update()
    {
        //Check if lost
        if (motor.transform.position.y < -10f) {

            gameplay = false;
            gameover = true;
           // Application.LoadLevel(Application.loadedLevel);
        }

        if (gameover) {
        
            motor.transform.position = new Vector3(0,5,-19.5f);
            motor.transform.rotation = Quaternion.identity;

            skin.transform.rotation = Quaternion.identity;
            gameover = false;

        }
    }

}
