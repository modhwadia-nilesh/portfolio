"use client";

import Image from "next/image";
import style from "./VideoSection.module.css";
import { PlayIcon } from "@/Molecules/Icons/PlayIcon";
import ModalVideo from "react-modal-video";
import { useState } from "react";
import "../../../node_modules/react-modal-video/scss/modal-video.scss";
import { useScreenSize } from "@/Hooks/useScreenSize";

export const VideoSection = () => {
  const [isOpen, setOpen] = useState(false);

  const { width, height } = useScreenSize();

  return (
    <div className={style.videoSection}>
      <div className="container">
        <div className="relative">
          <Image
            src="/images/VideoBG.png"
            width={0}
            height={0}
            sizes="100vw"
            priority={true}
            style={{ width: "100%", height: "100%" }}
            alt=""
          />
          <div className={style.modalVideo}>
            <ModalVideo
              channel="youtube"
              youtube={{ mute: 1, autoplay: 1 }}
              isOpen={isOpen}
              videoId="LXb3EKWsInQ"
              onClose={() => setOpen(!isOpen)}
            />
            <PlayIcon
              width={width < 767 ? 42 : 126}
              height={width < 767 ? 42 : 126}
              onClick={() => setOpen(!isOpen)}
            />
          </div>
        </div>
      </div>
    </div>
  );
};
