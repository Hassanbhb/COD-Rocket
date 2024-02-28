<?php

function isMatchingRoute($routeName) {
	return request()->routeIs($routeName);
}