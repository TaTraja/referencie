import React from 'react'
import Film from '../svg/Film'
import Print from '../svg/Print'
import Token from '../svg/Token'
import TranslateCarousel from '../components/TranslateCarousel'




const Mint = () => {


  return (
    <div id='mint' className='flex flex-col justify-center items-center text-white'>
      <div className='flex flex-col justify-center m-10 p-6 mb-12 w-11/12 md:w-128 border-darkGreen border bg-darkerGray bg-opacity-30 border-collapse rounded-md'>
        <div className='text-5xl  font-fredericka mb-10 text-center'>Mint our NFT</div>
        <p className='font-nunito mb-10 text-lg text-center'>By purchasing our Non Fungable Token, you will get more than just copyright. After minting our NFT, you have the choice to order the <b>original print</b> of the photo as well as the <b>original film</b>, so you are the only one, that can replicate it.</p>
          <div className='flex space-x-5 sm:space-x-3 justify-evenly mt-8'>
            <div className="tooltip" data-tip="PNG + Json"><Token/></div>
              <span className='text-5xl'>+</span>      
            <div className="tooltip" data-tip="Negative Film"><Film/></div>
              <span className=' text-5xl'>+</span> 
            <div className="tooltip" data-tip="Original Print"><Print/></div>

          </div>
          <ul className='list-disc text-xs mx-10 mt-8'>
            <li>Free entry to any Tatraja event: concerts, exhibitions, art contests, etc.</li>
            <li>Various discounts on our services and products</li>
            <li>Full ownership of NFT you own for commercial and private uses</li>
            <li>6 months free trial to our Hub platform</li>
          </ul>


      </div>



        {/*    Translating carousel   */}
<TranslateCarousel/>

    </div>
  )
}

export default Mint