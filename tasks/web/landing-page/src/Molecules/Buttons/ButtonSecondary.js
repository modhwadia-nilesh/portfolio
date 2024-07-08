'use client'

import style from "./Button.module.css";

export const ButtonSecondary = ({ children, ...rest }) => {
  return (
    <button className={style.buttonSecondary} {...rest}>{children}</button>
  )
}
