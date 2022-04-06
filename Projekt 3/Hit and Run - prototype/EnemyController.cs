using System.Collections;
using System.Collections.Generic;
using UnityEngine;





public class EnemyController : MonoBehaviour
{
    
    public GameObject wayPoint;
    public bool isHit = false;
   
    private bool hasDropped = false;
    private float yPosToDrop = 5f;
    private bool playedFallSoundFX = false;




    void Start()
    {

       
        //At the start of the game, the zombies will find the gameobject called motor.
        wayPoint = GameObject.Find("motor");
        StartAttacking();
    }

    private void OnEnable()
    {
        wayPoint = GameObject.Find("motor");
        Start();
    }


    private void FixedUpdate()
    {
        GetComponent<Rigidbody>().AddRelativeForce(Vector3.forward * Random.Range(3, 6));
    }
    void Update()
    {

        transform.LookAt(wayPoint.transform);


        if(this.transform.position.y < -1f){

            isHit = true;
            PlayFallSoundFX();
        
        }

        if (this.transform.position.y < -15f)
        {

            Destroy(gameObject);

        }

        //if (!isHit) 
       // {
           
           
       // }

        




    }

    private void PlayFallSoundFX()
    {
        if (!playedFallSoundFX) {

            playedFallSoundFX = true;
            GameObject.Find("SoundManager").GetComponent<SoundManager>().PlaySoundFX("enemyFall");
        }
    }

    void StartAttacking()
    {
        StartCoroutine(Attack());

    }

    IEnumerator Attack()
    {
        
        yield return new WaitForSeconds(1);

        Collider[] colliders = Physics.OverlapSphere(transform.position, 5f);

      
        foreach (Collider hit in colliders)
        {
            Rigidbody rb = hit.GetComponent<Rigidbody>();

            if (rb != null && rb.transform.name == "motor") {


                rb.AddExplosionForce(2500, transform.position, 15, 0, ForceMode.Force);
               
            }


        }

        StartAttacking();
    }

  


    IEnumerator DidHitPauseCoroutine()
    {
       

        //yield on a new YieldInstruction that waits for 5 seconds.
        yield return new WaitForSeconds(1);

        isHit = false;
      
    }



void OnTriggerEnter(Collider col)
    {
        if (col.name == "collider")
        {
            //Auto narazilo do kostlivca
            if (col.GetComponent<Rigidbody>().velocity.magnitude > GetComponent<Rigidbody>().velocity.magnitude) {

                isHit = true;
                DestroyEnemy();

            }

            //Obaja narazili do seba rovnako
            if (col.GetComponent<Rigidbody>().velocity.magnitude == GetComponent<Rigidbody>().velocity.magnitude)
            {

                isHit = true;
                col.GetComponent<Rigidbody>().velocity = Vector3.zero;
            }

            //Kostlivec narazil do auta
            if (col.GetComponent<Rigidbody>().velocity.magnitude < GetComponent<Rigidbody>().velocity.magnitude)
            {

                col.GetComponent<Rigidbody>().velocity = Vector3.zero;

                isHit = true;
                StartCoroutine(DidHitPauseCoroutine());
                StartAttacking();

            }



        }
    }

    private void DestroyEnemy()
    {
        //particle narazu
        Instantiate(GameObject.Find("DropManager").GetComponent<DropManager>().zombieAuchParticles, this.transform.position, Quaternion.identity);

        //Particles roztrusenych kosticiek - doprogramovat

        //Zrusenie vizualu kostlivca
        this.transform.GetChild(0).GetComponent<SkinnedMeshRenderer>().enabled = false;

        //DROP GENERATOR

        if (!hasDropped) {

            DropGenerator();

            
           
        }
        
        
        

        //ak je drop, dane particle

        //ak je drop, dany drop

        //zvuk AU DOPICI JEBEM BOHA

    }

    private void DropGenerator()
    {
        hasDropped = true;

        DropItemSimplified dropItemTemp = new DropItemSimplified();

        dropItemTemp = GameObject.Find("DropManager").GetComponent<DropManager>().Drop("zombie");

        //    Debug.Log(dropItemTemp.itemEffect);

        if (dropItemTemp.itemEffect == "GOLD")
        {

            Instantiate(GameObject.Find("DropManager").GetComponent<DropManager>().zombieGoldDropParticles, this.transform.position, Quaternion.identity);
            //Pridate zvuk sypajucich sa minci

            if (dropItemTemp.itemValue == 1 | dropItemTemp.itemValue == 10 | dropItemTemp.itemValue == 50)
            {

                //Dropnut realne mince
                GameObject newCoin = Instantiate(GameObject.Find("DropManager").GetComponent<DropManager>().coin, new Vector3(this.transform.position.x, this.transform.position.y + yPosToDrop, this.transform.position.z), Quaternion.Euler(new Vector3(90, 0, 0)));
                newCoin.GetComponent<DropBehaviour>().dropType = "coin";
                newCoin.GetComponent<DropBehaviour>().dropValue = dropItemTemp.itemValue;
                newCoin.name = "coin";
                GameObject.Find("SoundManager").GetComponent<SoundManager>().PlaySoundFX("coinDrop");

            }
            else if (dropItemTemp.itemValue == 100)
            {
                Debug.Log("value = " + dropItemTemp.itemValue);
                for (int i = 1; i <= 2; i++)
                {
                    //Dropnut realne mince
                    GameObject newCoin = Instantiate(GameObject.Find("DropManager").GetComponent<DropManager>().coin, new Vector3(this.transform.position.x, this.transform.position.y + yPosToDrop, this.transform.position.z), Quaternion.Euler(new Vector3(90, 0, 0)));
                    newCoin.GetComponent<DropBehaviour>().dropType = "coin";
                    newCoin.GetComponent<DropBehaviour>().dropValue = 50;
                    newCoin.name = "coin";
                    Debug.Log(i);
                    GameObject.Find("SoundManager").GetComponent<SoundManager>().PlaySoundFX("coinDrop");
                }


            }
            else if (dropItemTemp.itemValue == 200)
            {
                Debug.Log("value = " + dropItemTemp.itemValue);

                for (int i = 1; i <= 4; i++)
                {
                    //Dropnut realne mince
                    GameObject newCoin = Instantiate(GameObject.Find("DropManager").GetComponent<DropManager>().coin, new Vector3(this.transform.position.x, this.transform.position.y + yPosToDrop, this.transform.position.z), Quaternion.Euler(new Vector3(90, 0, 0)));
                    newCoin.GetComponent<DropBehaviour>().dropType = "coin";
                    newCoin.GetComponent<DropBehaviour>().dropValue = 50;
                    newCoin.name = "coin";
                    Debug.Log(i);
                    GameObject.Find("SoundManager").GetComponent<SoundManager>().PlaySoundFX("coinDrop");
                }
            }
            else if (dropItemTemp.itemValue == 500)
            {
                Debug.Log("value = " + dropItemTemp.itemValue);

                for (int i = 1; i <= 5; i++)
                {
                    //Dropnut realne mince
                    GameObject newCoin = Instantiate(GameObject.Find("DropManager").GetComponent<DropManager>().coin, new Vector3(this.transform.position.x, this.transform.position.y + yPosToDrop, this.transform.position.z), Quaternion.Euler(new Vector3(90, 0, 0)));
                    newCoin.GetComponent<DropBehaviour>().dropType = "coin";
                    newCoin.GetComponent<DropBehaviour>().dropValue = 100;
                    newCoin.name = "coin";
                    Debug.Log(i);
                    GameObject.Find("SoundManager").GetComponent<SoundManager>().PlaySoundFX("coinDrop");
                }
            }
            else if (dropItemTemp.itemValue == 1000)
            {
                Debug.Log("value = " + dropItemTemp.itemValue);

                for (int i = 1; i <= 5; i++)
                {
                    //Dropnut realne mince
                    GameObject newCoin = Instantiate(GameObject.Find("DropManager").GetComponent<DropManager>().coin, new Vector3(this.transform.position.x, this.transform.position.y + yPosToDrop, this.transform.position.z), Quaternion.Euler(new Vector3(90, 0, 0)));
                    newCoin.GetComponent<DropBehaviour>().dropType = "coin";
                    newCoin.GetComponent<DropBehaviour>().dropValue = 200;
                    newCoin.name = "coin";
                    Debug.Log(i);
                    GameObject.Find("SoundManager").GetComponent<SoundManager>().PlaySoundFX("coinDrop");
                }
            }



        }

        Destroy(this.gameObject);
    }
}



