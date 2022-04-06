using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class DropBehaviour : MonoBehaviour
{
    public string dropType;
    public int dropValue;
    public bool attracted = false;
    public bool normalFlickering = true;
    private Vector3 initPosition;
  
    private bool flickerState = true;

    private void Start()
    {
        initPosition = transform.position;
        StartCoroutine(DieAfterTime());
        InvokeRepeating("NormalFlickering", 2f, 0.4f);
        InvokeRepeating("RapidFlickering", 4f, 0.1f);
    }

    private void NormalFlickering()
    {

        if (normalFlickering) {
            if (flickerState)
            {
               
                GetComponent<MeshRenderer>().enabled = false;
                flickerState = false;
            }
            else
            {
               
                GetComponent<MeshRenderer>().enabled = true;
                flickerState = true;
            }
        }

    

    }



    private void RapidFlickering()
    {
        normalFlickering = false;
        

        if (flickerState)
        {
            
            GetComponent<MeshRenderer>().enabled = false;
            flickerState = false;
        }
        else
        {
           
            GetComponent<MeshRenderer>().enabled = true;
            flickerState = true;
        }

    }

    IEnumerator DieAfterTime()
    {
       
        yield return new WaitForSeconds(5);
        Destroy(gameObject);
    }

// Update is called once per frame
void Update()
{
        transform.Rotate(Vector3.forward * (90 * Time.deltaTime));

        if (!attracted) {
            transform.position = Vector3.Lerp(transform.position, initPosition, 1 * Time.deltaTime);
        }
        attracted = false;


    }
}
