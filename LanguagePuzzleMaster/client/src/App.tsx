import React from "react";
import "@fontsource/inter";

// This App component now simply redirects to our static HTML page
function App() {
  React.useEffect(() => {
    window.location.href = "/";
  }, []);

  return (
    <div>
      <p>Redirecting to the Static Power Systems website...</p>
    </div>
  );
}

export default App;
