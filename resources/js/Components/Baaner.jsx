import { Carousel } from "flowbite-react";
import picture1 from './../image/banner/picture1.jpg';
import picture2 from './../image/banner/picture2.jpg';
import picture3 from './../image/banner/picture3.jpg';
import picture4 from './../image/banner/picture4.jpg';
import picture5 from './../image/banner/picture5.jpg';

export function Baaner() {
  return (
    <div className="h-56 sm:h-64 xl:h-80 2xl:h-96 ">
      <Carousel>
        <img src={picture1} alt="..." />
       <img src={picture2} alt="..." />
        <img src={picture3} alt="..." />
        <img src={picture4} alt="..." />
        <img src={picture5} alt="..." />
       
      </Carousel>
    </div>
  );
}
