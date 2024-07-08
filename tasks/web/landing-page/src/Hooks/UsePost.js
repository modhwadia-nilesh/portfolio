import { useState } from "react";

// Base64 encoding of credentials
const credentials = btoa(
  `${process.env.NEXT_PUBLIC_APP_USERNAME}:${process.env.NEXT_PUBLIC_APP_PASSWORD}`
);

// Custom hook for making POST requests
export const UsePost = () => {
  // State variables for managing loading state, error handling, and response data
  const [isLoading, setIsLoading] = useState(null);
  const [error, setError] = useState(null);
  const [response, setResponse] = useState(null);

  // Function for making POST requests
  const postData = async (path, body) => {
    try {
      setIsLoading(true);

      // Send POST request to the specified path
      const response = await fetch(path, {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
          // Include authorization header with encoded credentials
          Authorization: `Basic ${credentials}`,
        },
        body: JSON.stringify(body),
      });

      setIsLoading(false);

      const json = await response.json();

      // Handle error responses
      if (!response.ok) {
        setError(json.error);
      }

      // Handle rate limit response (status code 429)
      if (response.status === 429) {
        setError("WE ALREADY RECEIVED YOUR MESSAGE PLEASE TRY AFTER 1 HOUR.");
      }

      // Handle successful response
      if (response.ok) {
        setResponse(json);
      }
    } catch (error) {
      // Handle unexpected errors
      setError("SOMETHING WENT WRONG");
      setIsLoading(false);
    }
  };

  // Return postData function and state variables for external use
  return { postData, response, isLoading, error };
};
