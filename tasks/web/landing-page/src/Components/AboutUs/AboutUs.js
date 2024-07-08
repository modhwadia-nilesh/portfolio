import style from "./AboutUs.module.css";
import { ButtonPrimary } from "@/Molecules/Buttons/ButtonPrimary";
import Image from "next/image";

export const AboutUs = () => {
  return (
    <div className={style.aboutUs}>
      <div className="container">
        <Image src="/images/DiamondIcon.png" height={66} width={66} alt="" />
        <h2>Aenean vulputate quis est et pulvinar.</h2>
        <p>
          Maecenas dapibus turpis id purus mollis aliquam. Sed facilisis nec
          ipsum nec rutrum.Maecenas dapibus turpis id purus mollis aliquam. Sed
          facilisis nec ipsum nec rutrum.Maecenas dapibus turpis id purus mollis
          aliquam. Sed facilisis nec ipsum nec
        </p>
        <ButtonPrimary>About Us</ButtonPrimary>
      </div>
    </div>
  );
};
