<?php
//This must be automated, because ther is now a lot of repetition of code into navs of all pages.
echo <<<EOF
<li class="nav-item active">
    <a class="nav-link" href="https://localhost/assembler/einar_projects/cms-php/public/index.php">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="https://localhost/assembler/einar_projects/cms-php/public/about-us.php">About us</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="https://localhost/assembler/einar_projects/cms-php/public/contact-us.php">Contact us</a>
</li>
<li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
</li>
EOF;
