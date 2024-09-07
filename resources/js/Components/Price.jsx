import React, { useState } from 'react';
//import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { FaWifi,FaCoffee ,FaParking } from 'react-icons/fa';
import { PiBuildingApartmentFill } from "react-icons/pi";
import { MdOutlineBathroom } from "react-icons/md";
import { FaKitchenSet } from "react-icons/fa6";
//import { faParking, faBroom, faKitchenSet, faBalcony, faWashingMachine, faBath } from '@fortawesome/free-solid-svg-icons';




const TabContent = ({ id, isActive, title, description, price, image }) => {
  return (
    <>
   
    <div
      id={id}
      className={`tab-content ${isActive ? '' : 'hidden'} flex items-center`}
    >
      <div className="flex flex-col w-full lg:w-1/2 lg:pr-8">
        <h2 className="text-2xl font-semibold mb-2 text-black">{title}</h2>
        <p className="text-gray-700 text-sm">{description}</p>
        <p className="text-xl font-bold mt-4">{price}</p>
        <ul>
            <li className='flex items-center space-x-3'>
                        <svg class='flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z' clip-rule='evenodd'></path></svg>
                        <span className="text-gray-950 flex items-center text-sm" >
                          Free Wifi
                          <FaWifi className="ml-2 text-gray-950" />
                         {/*} <faParking className="ml-2 text-gray-950" />
                         <faBalcony className="ml-2 text-gray-950" />
                          <faKitchenSet className="ml-2 text-gray-950" />
                          <faTerrace className="ml-2 text-gray-950" />
                          <faWashingMachine className="ml-2 text-gray-950" />

                          <faBath className="ml-2 text-gray-950" /> */}
                        </span>
                      
            </li>
            <li className='flex items-center space-x-3'>
                        <svg class='flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z' clip-rule='evenodd'></path></svg>
                        <span className="text-gray-950 flex items-center text-sm" >
                           Breakfast
                          <FaCoffee className="ml-2 text-gray-950" />
                        </span>
            </li>
            <li className='flex items-center space-x-3'>
                        <svg class='flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z' clip-rule='evenodd'></path></svg>
                        <span className="text-gray-950 flex items-center text-sm" >
                           Parking 
                          <FaParking className="ml-2 text-gray-950" />
                        </span>
            </li>
            <li className='flex items-center space-x-3'>
                        <svg class='flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z' clip-rule='evenodd'></path></svg>
                        <span className="text-gray-950 flex items-center text-sm" >
                           Apartment
                          <PiBuildingApartmentFill className="ml-2 text-gray-950" />
                        </span>
            </li>
            <li className='flex items-center space-x-3'>
                        <svg class='flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z' clip-rule='evenodd'></path></svg>
                        <span className="text-gray-950 flex items-center text-sm" >
                           Bathroom
                          <MdOutlineBathroom className="ml-2 text-gray-950" />
                        </span>
            </li>
            <li className='flex items-center space-x-3'>
                        <svg class='flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z' clip-rule='evenodd'></path></svg>
                        <span className="text-gray-950 flex items-center text-sm">
                           Kitchen
                          <FaKitchenSet className="ml-2 text-gray-950" />
                        </span>
            </li>
        </ul>
      </div>
      <div className="w-full lg:w-1/2 mt-4 lg:mt-0">
        <img src={image} alt={title} className="w-full h-80  rounded-lg shadow-lg"/>
      </div>
    </div>
    </>
  );
};

const Price = () => {
  const [activeTab, setActiveTab] = useState('basic');

  return (
    <>
     <h1 className="mb-4 text-4xl text-center  font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Choose Plan</h1>
    <div className="container mx-auto mt-10 px-4">
      {/* Tabs Navigation */}
      <div className="mb-4">
        <ul className="flex border-b border-gray-200">
          <li className="mr-1">
            <button
              onClick={() => setActiveTab('basic')}
              className={`inline-block py-2 px-4 ${
                activeTab === 'basic'
                  ? 'text-blue-500 border-blue-500 border-b-2'
                  : 'text-gray-500 hover:text-blue-500 hover:border-blue-500'
              }`}
            >
               Standard Room
            </button>
          </li>
          <li className="mr-1">
            <button
              onClick={() => setActiveTab('standard')}
              className={`inline-block py-2 px-4 ${
                activeTab === 'standard'
                  ? 'text-blue-500 border-blue-500 border-b-2'
                  : 'text-gray-500 hover:text-blue-500 hover:border-blue-500'
              }`}
            >
              Executive Room
            </button>
          </li>
          <li className="mr-1">
            <button
              onClick={() => setActiveTab('premium')}
              className={`inline-block py-2 px-4 ${
                activeTab === 'premium'
                  ? 'text-blue-500 border-blue-500 border-b-2'
                  : 'text-gray-500 hover:text-blue-500 hover:border-blue-500'
              }`}
            >
             Deluxe Plan
            </button>
          </li>
        </ul>
      </div>

      {/* Tab Content */}
      <div id="tab-content">
        <TabContent
          id="basic"
          isActive={activeTab === 'basic'}
          title="Standard Room"
          description="maelezo kuhusu room type pamoja na detail zote zinazohitajika kwenye specific room"
          price="Tsh 100,000/day"
          image="https://lipilima.tehama.website/assets/img/banner/2024-05-20/L1.jpg"
        />

        <TabContent
          id="standard"
          isActive={activeTab === 'standard'}
          title=" Executive Room"
          description="maelezo kuhusu room type pamoja na detail zote zinazohitajika kwenye specific room"
          price="Tsh 100,000/day"
          image="https://lipilima.tehama.website/assets/img/banner/2024-05-20/L24.jpg"
        />

        <TabContent
          id="premium"
          isActive={activeTab === 'premium'}
          title=" Deluxe room"
          description="maelezo kuhusu room type pamoja na detail zote zinazohitajika kwenye specific room"
          price="Tsh 100,000/day"
          image="https://lipilima.tehama.website/assets/img/banner/2024-05-20/L.jpg"
        />
      </div>
    </div>
 
    </>
  );
};

export default Price;
