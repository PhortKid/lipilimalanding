import { Carousel } from "flowbite-react";

export function Baaner() {
  return (
    <div className="h-56 sm:h-64 xl:h-80 2xl:h-96 ">
      <Carousel>
        <img src="http://127.0.0.1:8000/picture/L17.jpg" alt="..." />
       <img src="http://127.0.0.1:8000/picture/L2.jpg" alt="..." />
        <img src="http://127.0.0.1:8000/picture/L22.jpg" alt="..." />
        <img src="http://127.0.0.1:8000/picture/L4.jpg" alt="..." />
        <img src="http://127.0.0.1:8000/picture/L5.jpg" alt="..." />
       
      </Carousel>
    </div>
  );
}
