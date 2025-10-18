// Social Links
      const socialLinks = {
        facebook: "https://www.facebook.com/profile.php?id=100084005288417",
        twitter: "https://x.com/theta_data",
        linkedin:
          "https://www.linkedin.com/company/axiomx-theta-data/?viewAsMember=true",
      };

      // Utility Links
      const utilityLinks = {
        "Terms & Conditions": "#terms-link",
        "Privacy Policy": "#privacy-link",
      };

      // Insert social links
      const socialContainer = document.getElementById("social-links");
      for (const [icon, link] of Object.entries(socialLinks)) {
        const a = document.createElement("a");
        a.href = link;
        a.className = "social-link mx-2";
        a.setAttribute(
          "aria-label",
          icon.charAt(0).toUpperCase() + icon.slice(1)
        );
        a.innerHTML = `<i class="fa-brands fa-${icon}"></i>`;
        socialContainer.appendChild(a);
      }

      // Insert utility links
      const utilityContainer = document.getElementById("utility-links");
      for (const [text, link] of Object.entries(utilityLinks)) {
        const a = document.createElement("a");
        a.href = link;
        a.className = "footer-link-underline mb-1";
        a.textContent = text;
        utilityContainer.appendChild(a);
      }

      // Dynamic year
      const year = new Date().getFullYear();
      document.getElementById(
        "copyright"
      ).innerHTML = `Axonix LLC Theta Data &copy; 2020-${year}`;