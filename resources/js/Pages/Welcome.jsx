
import { Baaner } from "../Components/Baaner";
import Gallery from "../Components/Gallery";
import Heading from "../Components/Heading";
import Futa from "../Components/Futa";
import Naviibar from "../Components/Naviibar";
import LoadingAnimation from "./LoadingAnimation";
import Detail from "../Components/Detail";
import Price from "../Components/Price";
import Map from "../Components/Map";
import React, { useState, useEffect } from 'react';
import '../../css/index.css';



function Welcome() {
  //<Detail/>

  const [loading, setLoading] = useState(true);

  useEffect(() => {
    const timer = setTimeout(() => {
      setLoading(false);
    }, 2000); // Duration for the loader to show
    return () => clearTimeout(timer);
  }, []);
  return (
  <>
    <div className="app">
      {loading ? (
        <div className="loader-container">
          <div className="lds-ripple">
            <div></div>
            <div></div>
          </div>
        </div>
      ) : (
        <div className="content">

    <main className=" dark:bg-gray-800">
     
       <Naviibar/>
      <Baaner/>
      <Heading/>
      <Detail/>
      <Price/>
      <Gallery/>
   
      <Map/>
     <Futa/>  
    </main>

    </div>
       )}
    </div>
    </>
  );
}

export default Welcome;