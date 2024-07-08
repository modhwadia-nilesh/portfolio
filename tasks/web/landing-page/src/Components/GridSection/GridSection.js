"use client";

import { useState } from "react";
import style from "./GridSection.module.css";
import { FilledPlusIcon } from "@/Molecules/Icons/FilledPlusIcon";
import { TransparentPlusIcon } from "@/Molecules/Icons/TransparentPlusIcon";
import { useScreenSize } from "@/Hooks/useScreenSize";

const gridSectionContent = [
  {
    title: "Financial statements",
    desc: "Morbi purus libero, elementum nec gravida ac, commodo at erat. Etiam porta ipsum sed diam aliquam, rutrum tincidunt metus mattis.Morbi purus libero, Morbi purus libero, elementum nec ",
  },
  {
    title: "Press releases",
    desc: "Morbi purus libero, elementum nec gravida ac, commodo at erat. Etiam porta ipsum sed diam aliquam, rutrum tincidunt metus mattis.Morbi purus libero, Morbi purus libero, elementum nec ",
  },
  {
    title: "Webcast links",
    desc: "Morbi purus libero, elementum nec gravida ac, commodo at erat. Etiam porta ipsum sed diam aliquam, rutrum tincidunt metus mattis.Morbi purus libero, Morbi purus libero, elementum nec ",
  },
  {
    title: "Corporate governance",
    desc: "Morbi purus libero, elementum nec gravida ac, commodo at erat. Etiam porta ipsum sed diam aliquam, rutrum tincidunt metus mattis.Morbi purus libero, Morbi purus libero, elementum nec ",
  },
];

export const GridSection = () => {
  const [hoveredItemIndex, setHoveredItemIndex] = useState(null);

  const { width, height } = useScreenSize();

  return (
    <div className={style.gridSection}>
      <div className="row gridRow">
        {gridSectionContent.map((item, index) => (
          <div
            className={`${style.grid} ${
              hoveredItemIndex === index || width < 1024
                ? style.active
                : style.deactive
            }`}
            key={index}
            onMouseOver={() => setHoveredItemIndex(index)}
            onMouseOut={() => setHoveredItemIndex(null)}
          >
            {hoveredItemIndex === index || width < 1024 ? (
              <FilledPlusIcon width={64} height={64} />
            ) : (
              <TransparentPlusIcon width={64} height={64} />
            )}
            <h3>{item.title}</h3>
            <p>{item.desc}</p>
          </div>
        ))}
      </div>
    </div>
  );
};
