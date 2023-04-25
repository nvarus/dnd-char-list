<style>
	.nav-menu .nav-menu__list {
		display: flex;
		justify-content: space-between;
		margin: 0 auto;
		font-size: 15px;
		max-width: 400px;
		padding-bottom: 15px; }
	.nav-menu .nav-menu__list .nav-menu__item {
		list-style-type: none;
		padding: 15px 15px 7px 15px; }
	.nav-menu .nav-menu__list .nav-menu__item > a {
		text-decoration: none;
		padding: 15px 15px 7px 15px;
		color: var(--main-color); }
	.nav-menu .nav-menu__list .nav-menu__item > a:hover {
		color: white;
		background: var(--main-color);
		border-radius: 0px 0px 10px 10px; }
</style>

<ul class="nav-menu__list">
	<li class="nav-menu__item">
		<a href="index.php?page=1">Home</a>
	</li>
	<li class="nav-menu__item">
		<a href="index.php?page=2">New Character</a>
	</li>
	<li class="nav-menu__item">
		<a href="index.php?page=3">Characters list</a>
	</li>
</ul>
