# CrystalCollider
A reverse engineered reimplementation of [The Collider](https://store.steampowered.com/app/319550/The_Collider/)'s server <br>
Without a server, the game crashes on initialization due to lack of game data <br>
This game notably downloads a big amount of data from the server, from game settings to game levels

## Features
- [x] Game initialization
- [x] Speed levels (100 to 1300)
- [x] Level colors
- [x] Level obstacles
- [x] Level curves
- [x] Level patterns
- [x] Weekly tournament rewards
- [ ] Shop
- [ ] Register new player
- [ ] Leaderboards

## Requirements
- [PHP 7.4+](https://secure.php.net/downloads.php)

## Usage
1. Add `127.0.0.1	stats.shortbreakstudios.com` to your hosts file
2. Set up a local web server and clone this repository into your web server folder

## License
This project is licensed under the GNU GPLv2 license. This software may be modified/distributed for commercial or private use but changes to the source code must be published under the same license, containing a copy of the license and a copyright notice. <br>
Developed by [AniLeo](https://github.com/AniLeo) at ani-leo@outlook.com (C) 2020.
