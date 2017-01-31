var onion_url = "foobarbazqux.onion"; // Replace as appropriate
if (window.location.hostname !== onion) {
	window.location = "http://" + onion_url + window.location.pathname + window.location.search + window.location.hash;
}
