# Theta Data Blog

This is the Astro-based blog for Theta Data, built using the Astro framework with content collections for blog posts.

## 🚀 Project Structure

Inside of your Astro project, you'll see the following folders and files:

```text
├── public/
│   ├── css/
│   ├── fonts/
│   ├── images/
│   └── favicon.svg
├── src/
│   ├── components/
│   │   ├── BaseHead.astro
│   │   ├── BlogPostFull.astro
│   │   ├── Footer.astro
│   │   ├── FormattedDate.astro
│   │   ├── Header.astro
│   │   └── HeaderLink.astro
│   ├── content/
│   │   ├── blog/
│   │   │   └── [your-blog-posts].md
│   │   └── config.ts
│   ├── layouts/
│   │   └── BlogPost.astro
│   ├── pages/
│   │   ├── index.astro
│   │   ├── rss.xml.js
│   │   └── blog/
│   │       └── [...slug].astro
│   ├── assets/
│   └── styles/
│       └── global.css
├── astro.config.mjs
├── package.json
├── tsconfig.json
└── README.md
```

Astro looks for `.astro` or `.md` files in the `src/pages/` directory. Each page is exposed as a route based on its file name.

The `src/content/blog/` directory contains blog posts as Markdown and MDX documents. Use `getCollection()` to retrieve posts, and type-check your frontmatter using the schema defined in `src/content.config.ts`.

Any static assets, like images, can be placed in the `public/` directory.

## 📝 Adding a New Blog Post

To add a new blog post, follow these steps:

1. **Create a new Markdown file** in the `src/content/blog/` directory. The file should have a `.md` or `.mdx` extension. Use a descriptive filename, e.g., `my-new-post.md`.

2. **Add frontmatter** at the top of the file. The frontmatter must include the following fields:

   ```yaml
   ---
   title: "Your Blog Post Title"
   description: "A brief description of the post for SEO and previews."
   pubDate: "Aug 06 2024" # Publication date in a parseable format
   updatedDate: "Aug 21 2024" # Optional: Update date if applicable
   heroImage: /images/your-image.jpg # Optional: Path to hero image
   ---
   ```

   - `title`: The title of the blog post (string).
   - `description`: A short description for SEO and social media previews (string).
   - `pubDate`: The publication date (will be coerced to a Date object).
   - `updatedDate`: Optional update date (will be coerced to a Date object).
   - `heroImage`: Optional image for the post hero (use Astro's image helper).

3. **Write your content** below the frontmatter using Markdown or MDX syntax. You can include headings, paragraphs, links, images, code blocks, etc.

4. **Save the file**. The blog will automatically pick up the new post when you run the development server or build the site.

Example blog post file (`src/content/blog/example-post.md`):

```md
---
title: "Example Blog Post"
description: "This is an example of how to structure a blog post."
pubDate: "Aug 06 2024"
heroImage: /images/example.jpg
---

# Introduction

This is the content of your blog post. You can write in Markdown.

## Section

More content here.

![Alt text](/images/image.png)
```

5. **Preview the post**: Run `npm run dev` to start the development server and navigate to the blog section to see your new post.

## 🧞 Commands

All commands are run from the root of the blog project (`blog/` directory), from a terminal:

| Command                   | Action                                           |
| :------------------------ | :----------------------------------------------- |
| `npm install`             | Installs dependencies                            |
| `npm run dev`             | Starts local dev server at `localhost:4321`      |
| `npm run build`           | Build your production site to `./dist/`          |
| `npm run preview`         | Preview your build locally, before deploying     |
| `npm run astro ...`       | Run CLI commands like `astro add`, `astro check` |
| `npm run astro -- --help` | Get help using the Astro CLI                     |

## 🏗️ Building the Blog

To build the blog for production:

1. Ensure all dependencies are installed: `npm install`
2. Run the build command: `npm run build`

This will generate the production files in the `./dist/` directory. The build process includes:

- Compiling Astro components and pages
- Processing Markdown/MDX content from `src/content/blog/`
- Optimizing images and assets
- Generating RSS feed (`rss.xml.js`)
- Creating sitemap
- Minifying CSS and JavaScript

After building, you can preview the production build locally with `npm run preview`.

## Features

- ✅ Minimal styling (customizable!)
- ✅ 100/100 Lighthouse performance
- ✅ SEO-friendly with canonical URLs and OpenGraph data
- ✅ Sitemap support
- ✅ RSS Feed support
- ✅ Markdown & MDX support
- ✅ Content collections for type-safe blog posts

## 👀 Want to learn more?

Check out [Astro's documentation](https://docs.astro.build) or jump into our [Discord server](https://astro.build/chat).

## Credit

This theme is based off of the lovely [Bear Blog](https://github.com/HermanMartinus/bearblog/).
