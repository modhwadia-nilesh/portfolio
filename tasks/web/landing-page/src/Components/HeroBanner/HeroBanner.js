import style from "./HeroBanner.module.css";

export const HeroBanner = () => {
  return (
    <div className={style.heroBanner}>
      <div className={style.heroBannerWrapper}>
        <h2>Lorem ipsum dolor sit amet, consec</h2>
        <p>
          Aliquam eu malesuada turpis, eu interdum nibh. Etiam tristique erat in
          ligula consequat malesuada. Praesent posuere vestibulum neque ac
          posuere.
        </p>
      </div>
    </div>
  );
};
