<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="layoutnew.css">
	<title>tec1850 | Practical</title>
</head>

<body>

	<div id="header">
		<h1>Taylor Cox's Practical Exam</h1>
	</div>

	<div class="colmask threecol">

		<div class="colmid">

			<div class="colleft">

				<div class="col1">
					<h2>Justice League</h2>
					<br>
					<p>
						“Justice League,” the newest DC Comics superhero jam directed by Zack Snyder, is looser, goosier and certainly more watchable
						than the last one. The bar could scarcely have been lower given that the previous movie, “Batman v Superman: Dawn of
						Justice,” was such an interminable slog. The superhero and villain dynamic is much the same (slayers going to slay,
						etc.), but there are a few fresh faces now and Wonder Woman has more to do than play backup. The story is a confusion
						of noise, visual clutter and murderous digital gnats, but every so often a glimmer of life flickers through.
					</p>
					<p>
						The last time he fronted a movie, Superman (Henry Cavill) seemed to die, a plot twist that not even the most credulous viewer
						could buy. So, of course he’s back in this one, eventually, although first the band needs to get together. Having seen
						trouble on the horizon, Batman, a.k.a. Bruce Wayne — played with a sepulchral growl and bespoke stubble by Ben Affleck
						— takes the lead on this enterprise. He’s the insistent manager as well as the scowling host, the guy with the cool
						digs, smooth rides with blinking screens (“critical damage” reads one with great comic-book sincerity) and suave butler
						(Jeremy Irons as Alfred). He’s also pretty much of a yawn.
					</p>
					<button id="toggleButton" type="button">Change Color</button>
				</div>

				<div class="col2">
					<h3>Sources</h3>
					<br>
					<a href="https://www.nytimes.com/2017/11/15/movies/justice-league-review-wonder-woman-batman-dc-comics.html">New York Times Review</a>
					<br>
					<br>
					<a href="http://www.imdb.com/title/tt0974015/mediaviewer/rm1061640448">Poster from IMDB</a>

				</div>

				<div class="col3">
					<img src="poster.jpg" alt="poster.jpg">
				</div>

			</div>
		</div>

		<div id="footer">
<?php
echo "<p>This page was acessed on  ";
echo date("l, F jS");
echo " at ";
echo date("g:ia");
echo "</p>";
?>
		</div>

	</div>

	<script>
		function changeColor() {

			if (document.body.style.backgroundColor === "skyblue") {
				document.body.style.backgroundColor = "palegreen";
			}
			else {
				document.body.style.backgroundColor = "skyblue";
			}
		}

		toggleButton.addEventListener("click", changeColor);
	</script>
</body>

</html>