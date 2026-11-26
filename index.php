<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CampusNotes - Student Learning Resources</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header>
    <a href="#intro" class="site-title">CampusNotes</a>

    <nav aria-label="Main navigation">
      <ul>
        <li><a href="#intro">Home</a></li>
        <li><a href="#modules">Modules</a></li>
        <li><a href="#guides">Study Guides</a></li>
        <li><a href="#media">Media</a></li>
        <li><a href="#notices">Notices</a></li>
      </ul>
    </nav>
  </header>

  <main>

    <section id="intro">
      <h1>Student Learning Resource Platform</h1>
      <p>
        Welcome to CampusNotes. This website puts together class notes, basic coding references,
        and short study media for undergraduate students learning web development and programming.
      </p>

      <figure>
        <img
          src="https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?auto=format&fit=crop&w=900&q=80"
          alt="Open textbooks and notebooks arranged on a wooden study desk"
        >
        <figcaption>Organized notes and regular practice make exam revision much easier.</figcaption>
      </figure>
    </section>

    <section id="modules" class="modules-grid">
      <h2>Course Modules</h2>

      <article class="featured">
        <img
          src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=900&q=80"
          alt="Laptop screen showing HTML and CSS code in an editor"
        >
        <h3>Web Technologies (HTML &amp; CSS)</h3>
        <p>
          Covers page structure with semantic HTML5 elements, styling with CSS, Flexbox alignment,
          CSS Grid layouts, and responsive design for mobile, tablet, and desktop screens.
        </p>
        <a href="https://developer.mozilla.org/en-US/docs/Learn" target="_blank" rel="noopener">Open MDN Web Guide</a>
      </article>

      <article>
        <img
          src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?auto=format&fit=crop&w=800&q=80"
          alt="Java source code displayed on a computer monitor"
        >
        <h3>Java Programming</h3>
        <p>
          Covers variables, arithmetic operators, user input with Scanner, constructors, and
          basic object-oriented programming exercises.
        </p>
        <a href="https://docs.oracle.com/javase/tutorial/" target="_blank" rel="noopener">View Java Docs</a>
      </article>

      <article>
        <img
          src="https://images.unsplash.com/photo-1509228468518-180dd4864904?auto=format&fit=crop&w=800&q=80"
          alt="Handwritten math equations and sketches in a notebook"
        >
        <h3>Mathematics for Computing</h3>
        <p>
          Includes practice sheets on sets, logic gates, functions, derivatives, and basic
          problem-solving methods used in computer science.
        </p>
        <a href="https://www.khanacademy.org/math" target="_blank" rel="noopener">Practice on Khan Academy</a>
      </article>
    </section>

    <section id="guides">
      <h2>Quick Study Guides</h2>

      <ul class="guides-list">
        <li>
          <article>
            <h3>Common Semantic Tags</h3>
            <p>Use meaningful tags instead of too many divs:</p>
            <ul class="bullet-list">
              <li><code>&lt;header&gt;</code> and <code>&lt;nav&gt;</code> for the top bar</li>
              <li><code>&lt;main&gt;</code>, <code>&lt;section&gt;</code>, and <code>&lt;article&gt;</code> for content</li>
              <li><code>&lt;aside&gt;</code> for sidebars and <code>&lt;footer&gt;</code> for the bottom</li>
            </ul>
          </article>
        </li>

        <li>
          <article>
            <h3>Flexbox vs. CSS Grid</h3>
            <p>Simple rule for picking a layout tool:</p>
            <ol class="number-list">
              <li>Use Flexbox for one-direction rows or columns like menus.</li>
              <li>Use CSS Grid for two-dimensional page or card layouts.</li>
              <li>Use media queries to stack columns on smaller screens.</li>
            </ol>
          </article>
        </li>
      </ul>
    </section>

    <section id="media" class="media-grid">
      <h2>Multimedia Resources</h2>

      <article>
        <h3>Sample Video Lesson</h3>
        <p>Short HTML5 video player using built-in browser controls.</p>
        <figure>
          <video controls poster="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=800&q=80">
            <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
          </video>
          <figcaption>Video: Sample lecture playback demonstration.</figcaption>
        </figure>
      </article>

      <article>
        <h3>Audio Revision Clip</h3>
        <p>Short HTML5 audio player for quick topic summaries.</p>
        <figure>
          <audio controls>
            <source src="https://www.w3schools.com/html/horse.mp3" type="audio/mpeg">
            Your browser does not support HTML5 audio.
          </audio>
          <figcaption>Audio: Sample revision clip with playback controls.</figcaption>
        </figure>
      </article>
    </section>

  </main>

  <aside id="notices">
    <section>
      <h2>Announcements</h2>
      <ul class="notice-list">
        <li><strong>Week 1 Workshop:</strong> Responsive HTML &amp; CSS site due Friday.</li>
        <li><strong>Java Tutorial:</strong> Constructor and Scanner practice uploaded.</li>
        <li><strong>Lab Hours:</strong> Computer lab is open 10:00 AM to 4:00 PM.</li>
      </ul>
    </section>

    <section>
      <h2>Useful Links</h2>
      <ul class="link-list">
        <li><a href="https://developer.mozilla.org/" target="_blank" rel="noopener">MDN Web Docs</a></li>
        <li><a href="https://www.w3schools.com/" target="_blank" rel="noopener">W3Schools</a></li>
        <li><a href="https://css-tricks.com/" target="_blank" rel="noopener">CSS-Tricks</a></li>
        <li><a href="https://github.com/" target="_blank" rel="noopener">GitHub</a></li>
      </ul>
    </section>

    <section>
      <h2>Study Tips</h2>
      <ol class="number-list">
        <li>Write code by hand instead of copy-pasting.</li>
        <li>Test your page on phone and tablet sizes.</li>
        <li>Keep file names lowercase and simple.</li>
      </ol>
    </section>
  </aside>

  <footer>
    <section>
      <h3>CampusNotes</h3>
      <p>A basic student learning resource platform created for the Week 1 HTML and CSS workshop.</p>
    </section>

    <section>
      <h3>Sections</h3>
      <ul>
        <li><a href="#intro">Home</a></li>
        <li><a href="#modules">Modules</a></li>
        <li><a href="#guides">Study Guides</a></li>
        <li><a href="#media">Media</a></li>
      </ul>
    </section>

    <section>
      <h3>Contact</h3>
      <p>Email: info@campusnotes.edu</p>
      <p>Department of Computer Science</p>
    </section>

    <p class="copyright">&copy; 2026 CampusNotes. Week 1 Workshop Project.</p>
  </footer>

</body>
</html>