# ThetaData Website and Blog

This repository contains the source code for the ThetaData static website and its accompanying blog.

## Project Structure

The project is divided into two main parts:

1.  **Static Website (root):** The core marketing website, located in the root directory. It is built with plain HTML, CSS, and JavaScript.
2.  **Blog (`/blog`):** A modern blog powered by the [Astro](https://astro.build/) framework.

## Running the Project Locally

You will need to run two separate development servers to view the entire project (the main site and the blog).

### 1. Running the Static Website

The main website can be served using any simple HTTP server. Here are a couple of options:

**Using the VS Code Live Server Extension:**

1.  Install the [Live Server](https://marketplace.visualstudio.com/items?itemName=ritwickdey.LiveServer) extension from the VS Code Marketplace.
2.  Right-click on the `index.html` file in the root of the project.
3.  Select "Open with Live Server".

**Using Python:**

1.  Make sure you have Python installed.
2.  Open a terminal in the root of the project (`theta-data`).
3.  Run the following command:
    ```bash
    python -m http.server
    ```
4.  Open your web browser and navigate to `http://localhost:8000`.

### 2. Running the Blog

The blog is an Astro project and requires Node.js.

1.  Open a terminal and navigate to the `blog` directory:
    ```bash
    cd blog
    ```
2.  Install the necessary dependencies:
    ```bash
    npm install
    ```
3.  Start the Astro development server:
    ```bash
    npm run dev
    ```
4.  The blog will be available at `http://localhost:4321`.

## Creating a New Blog Post

1.  Navigate to the `blog/src/content/blog` directory.
2.  Create a new Markdown file (e.g., `my-new-post.md`).
3.  Add your content to the file, following the format of the existing posts.
4.  To build the blog for production, run the following command from the `blog` directory:
    ```bash
    npm run build
    ```
    The output will be in the `blog/dist` directory.

## CSS Styling

The CSS for this project is structured as follows:

- **Main Website:** The styles for the main website are located in the `/css` directory. These are standard CSS files and are not directly shared with the blog.
- **Blog:** The blog's styles are located in `blog/src/styles`. It uses a global CSS file (`global.css`) and also pulls in a Bootstrap theme from a CDN. The CSS for the blog is separate from the main website.
