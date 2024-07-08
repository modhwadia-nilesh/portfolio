'use client'

import style from "./Button.module.css";

export const ButtonPrimary = ({ children, ...rest }) => {
  return (
    <button className={style.buttonPrimary} {...rest}>{children}</button>
  )
}
