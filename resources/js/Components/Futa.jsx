import { Footer } from "flowbite-react";
import { BsDribbble, BsFacebook, BsGithub, BsInstagram, BsTwitter } from "react-icons/bs";

export default function Futa() {
  return (
    <>
   
    <Footer container className=" dark:bg-white bg-gray-800 ">
      <div className="w-full">
        <div className="grid w-full justify-between sm:flex sm:justify-between md:flex md:grid-cols-1">
          <div>
              <p className="text-gray-500  text-3xl">Lipilima Tower & Apartment</p>
              <p className="text-gray-500 text-sm">
              We offer Modern Living and Functional Business Spaces for Short & Long Stay</p>
          </div>
          <div className="grid grid-cols-2 gap-8 sm:mt-4 sm:grid-cols-3 sm:gap-6">
          
            <div>
              <Footer.Title title="Follow us" />
              <Footer.LinkGroup col>
                <Footer.Link href="https://www.instagram.com/lipilimaapartments/">Instagram</Footer.Link>
                <Footer.Link href="#">Facebook</Footer.Link>
              </Footer.LinkGroup>
            </div>
            <div>
              <Footer.Title title="About" />
              <Footer.LinkGroup col>
                <Footer.Link href="#">Iringa,Mshindo</Footer.Link>
                <Footer.Link href="#">Contact :0750802615</Footer.Link>
              </Footer.LinkGroup>
            </div>
          </div>
        </div>
        <Footer.Divider />
        <div className="w-full sm:flex sm:items-center sm:justify-between">
          <Footer.Copyright href="#" by="Lipilima™" year={2024} />
          <div className="mt-4 flex space-x-6 sm:mt-0 sm:justify-center">
            <Footer.Icon href="#" icon={BsFacebook} />
            <Footer.Icon href="#" icon={BsInstagram} />
            <Footer.Icon href="#" icon={BsTwitter} />
            {/*
            <Footer.Icon href="#" icon={BsSnapchat} />
            <Footer.Icon href="#" icon={BsWhatsapp} /> */}
          </div>
        </div>
      </div>
    </Footer>
    </>
  );
}
