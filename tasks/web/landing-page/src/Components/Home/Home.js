import { Fragment } from "react";
import { AboutUs } from "../AboutUs/AboutUs";
import { HeroBanner } from "../HeroBanner/HeroBanner";
import { VideoSection } from "../VideoSection/VideoSection";
import { GridSection } from "../GridSection/GridSection";
import { Operations } from "../Operations/Operations";
import { ContactForm } from "../ContactForm/ContactForm";

export const Home = () => {
  return (
    <Fragment>
      <HeroBanner />
      <AboutUs />
      <VideoSection />
      <GridSection />
      <Operations />
      <ContactForm />
    </Fragment>
  );
};
