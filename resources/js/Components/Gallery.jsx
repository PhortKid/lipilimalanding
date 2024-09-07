import React from 'react';

import AOS from 'aos';
import 'aos/dist/aos.css';
AOS.init();

import lipilima1 from "./../image/lipilima1.jpg";
import lipilima2 from "./../image/lipilima2.jpg";
import lipilima3 from "./../image/lipilima3.jpg";
import lipilima4 from "./../image/lipilima4.jpg";
import lipilima5 from "./../image/lipilima5.jpg";
import lipilima6 from "./../image/lipilima6.jpg";
import lipilima7 from "./../image/lipilima7.jpg";
import lipilima8 from "./../image/lipilima8.jpg";
import lipilima9 from "./../image/lipilima9.jpg";
import lipilima10 from "./../image/lipilima10.jpg";
import lipilima11 from "./../image/lipilima11.jpg";
import lipilima12 from "./../image/lipilima12.jpg";
//import lipilima13 from "../image/lipilima13.jpg";

export default function Gallery() {
  return (
    <>

<h1 className="mb-4 text-4xl text-center  font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white pt-4">Gallery</h1>

<div className="grid grid-cols-2 md:grid-cols-4 gap-4">
    <div className="grid gap-4">
        <div>
            <img className="h-auto max-w-full rounded-lg" src={lipilima1} alt="" data-aos="zoom-in" />
        </div>
        <div>
            <img className="h-auto max-w-full rounded-lg" src={lipilima5} alt="" data-aos="zoom-in-left" />
        </div>
        <div>
            <img className="h-auto max-w-full rounded-lg" src={lipilima8} alt="" data-aos="zoom-in-right" />
        </div>
    </div>
    <div className="grid gap-4">
        <div>
            <img className="h-auto max-w-full rounded-lg" src={lipilima4} alt="" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500"/>
        </div>
        <div>
            <img className="h-auto max-w-full rounded-lg" src={lipilima12} alt="" data-aos="fade-up"
     data-aos-anchor-placement="top-center"/>
        </div>
        <div>
            <img className="h-auto max-w-full rounded-lg" src={lipilima3} alt="" data-aos="fade-up"
     data-aos-anchor-placement="bottom-bottom"/>
        </div>
    </div>
    <div className="grid gap-4">
        <div>
            <img className="h-auto max-w-full rounded-lg" src={lipilima7} alt="" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000"/>
        </div>
        <div>
            <img className="h-auto max-w-full rounded-lg" src={lipilima9} alt="" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000"/>
        </div>
        <div>
            <img className="h-auto max-w-full rounded-lg" src={lipilima6} alt="" data-aos="fade-up"
     data-aos-anchor-placement="center-bottom"/>
        </div>
    </div>
 
    <div className="grid gap-4">
        <div>
            <img className="h-auto max-w-full rounded-lg" src={lipilima10} alt="" data-aos="fade-up"
     data-aos-anchor-placement="top-bottom"/>
        </div>
        <div>
            <img className="h-auto max-w-full rounded-lg" src={lipilima11} alt="" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000"/>
        </div>
        <div>
            <img className="h-auto max-w-full rounded-lg" src={lipilima2} alt="" data-aos="fade-zoom-in"
data-aos-easing="ease-in-back"
     data-aos-delay="300"
     data-aos-offset="0"/>
        </div>
    </div>
</div>



    </>
  );
}
