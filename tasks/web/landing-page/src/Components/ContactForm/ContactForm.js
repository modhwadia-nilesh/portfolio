"use client";

import { useState } from "react";
import style from "./ContactForm.module.css";
import { UsePost } from "@/Hooks/UsePost";

export const ContactForm = () => {
  const [userDetails, setUserDetails] = useState({
    name: "",
    email: "",
    message: "",
  });

  const [formErrors, setFormErrors] = useState({
    name: "",
    email: "",
  });

  const handleChange = (event) => {
    const { name, value } = event.target;

    setUserDetails((prev) => ({ ...prev, [name]: value }));

    setFormErrors((prev) => ({ ...prev, [name]: "" }));
  };

  const { postData, response, isLoading, error } = UsePost();

  const validate = () => {
    const errors = {};
    if (!userDetails.name) errors.name = "Name is required";
    if (!userDetails.email) errors.email = "Email is required";
    return errors;
  };

  const handleSubmit = async (event) => {
    event.preventDefault();

    const errors = validate();
    if (Object.keys(errors).length > 0) {
      setFormErrors(errors);
      return;
    }

    await postData(`${process.env.NEXT_PUBLIC_APP_CONTACT_API}`, userDetails);

    setUserDetails({ name: "", email: "", message: "" });
  };

  return (
    <div className={style.contactForm}>
      <div className={style.form}>
        <p>Any questions?</p>
        <h1>Let’s talk today!</h1>
        {error && <div className={style.errorMessage}>{error}</div>}
        <form onSubmit={handleSubmit}>
          <input
            className="input"
            placeholder="Name"
            onChange={handleChange}
            type="text"
            name="name"
            value={userDetails.name || ""}
            style={formErrors.name ? { border: "1px solid red" } : {}}
          />
          {formErrors.name && (
            <div className={style.fieldError}>{formErrors.name}</div>
          )}
          <input
            className="input"
            placeholder="Email"
            onChange={handleChange}
            type="email"
            name="email"
            value={userDetails.email || ""}
            style={formErrors.email ? { border: "1px solid red" } : {}}
          />
          {formErrors.email && (
            <div className={style.fieldError}>{formErrors.email}</div>
          )}
          <textarea
            placeholder="Message"
            name="message"
            value={userDetails.message || ""}
            onChange={handleChange}
          />
          <button
            type="submit"
            className={style.submitBtn}
            disabled={isLoading}
          >
            {isLoading ? "Loading" : "Submit"}
          </button>
        </form>
        {response?.success === true ? (
          <div className={style.successMessage}>
            Your Form has been submitted successfully!
          </div>
        ) : (
          ""
        )}
      </div>
    </div>
  );
};
