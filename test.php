<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cool Page</title>
    <!-- <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css"
    /> -->
  </head>
  <body>
    <section class="hero is-primary">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">Cool Page</h1>
          <h2 class="subtitle">Using Bulma for awesome styling</h2>
        </div>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <div class="columns">
          <div class="column is-one-third">
            <nav class="panel">
              <p class="panel-heading">Navigation</p>
              <a class="panel-block is-active" href="#"> Home </a>
              <a class="panel-block" href="#"> About </a>
              <a class="panel-block" href="#"> Contact </a>
              <a class="panel-block" href="#"> FAQ </a>
            </nav>
          </div>
          <button>ceci est un bouton</button>
          <style>
button {
  padding: 10px 15px;
  border-radius: 5px;
  font-size: 16px;
  color: #fff;
  background-color: #0095ff;
  cursor: pointer;
  transition: all 0.2s ease-in-out;
}

button:hover {
  animation: hover-animation 0.2s ease-in-out;
}

button:active {
  animation: click-animation 0.2s ease-in-out;
}

@keyframes hover-animation {
  from {
    transform: scale(1);
  }
  to {
    transform: scale(1.1);
  }
}

@keyframes click-animation {
  from {
    transform: scale(1.1);
  }
  to {
    transform: scale(0.9);
  }
}

          </style>
          <div class="column">
            <h2 class="title is-2">Welcome to our cool page!</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
              commodo neque et est placerat, sed vehicula velit varius. In non
              velit sed dui dignissim condimentum. Pellentesque dictum lacus sed
              justo aliquet, eu euismod sem suscipit. Suspendisse ultricies
              mollis lectus, in congue dolor pellentesque vel. Vivamus vel
              volutpat urna, sed malesuada ipsum. Praesent gravida tortor sed
              leo consectetur, eget efficitur est lobortis. Nullam pretium, ex
              in interdum placerat, magna justo rhoncus lectus, ac vehicula
              risus tortor non risus. Donec vulputate turpis at turpis
              sollicitudin porttitor. Nam quis justo euismod, interdum erat et,
              tincidunt purus. Etiam tempus eu arcu at ultricies.
            </p>
          </div>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="content has-text-centered">
        <p>Powered by <a href="https://bulma.io/">Bulma</a></p>
      </div>
    </footer>
  </body>
</html>
