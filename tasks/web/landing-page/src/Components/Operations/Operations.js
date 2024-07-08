'use client'

import Image from "next/image";
import style from "./Operations.module.css";
import { ButtonSecondary } from "@/Molecules/Buttons/ButtonSecondary";

export const Operations = () => {
  return (
    <div className={style.operations}>
      <div className="container">
        <div className="row">
          <div className="col-lg-6">
            <Image
              src="/images/OperationsImage.png"
              width={0}
              height={0}
              sizes="100vw"
              priority={true}
              style={{ width: "100%", height: "100%" }}
              alt=""
            />
          </div>
          <div className="col-lg-6">
            <h2>
              Usce arcu turpis, vehicula in elementum tincidunt, faucibus at
              ligula.
            </h2>
            <p>
              <strong>
                Proin pharetra lectus non felis vulputate, nec commodo quam
                mattis. Donec fermentum diam eget sem placerat vestibulum. Donec
                consectetur ut leo quis feugiat.
              </strong>
            </p>
            <p>
              Phasellus quis dignissim lectus. Maecenas dolor ex, pulvinar in
              vestibulum eu, condimentum sit amet lacus. Fusce ex augue,
              facilisis ut ligula vitae, fringilla dictum sem. Donec tempus
              blandit nulla vel auctor. Donec non vestibulum tellus, sit amet
              condimentum felis. Maecenas scelerisque elit a lectus consequat
              tincidunt.
            </p>

            <ButtonSecondary>Read about operations</ButtonSecondary>
          </div>
        </div>
      </div>
    </div>
  );
};
