# Top Post of the Month (TPotM)
[![Build Status](https://travis-ci.org/3D-I/tpotm.svg)](https://travis-ci.org/3D-I/tpotm)

**Top Poster of the Month** (SMcCandlish fork) is a phpBB extension to automatically calculate a Top Poster of the Month award and a top posters Hall of Fame page.

This extension requires at least phpBB version 3.3.0.

This is a port of the mod 3D-I made first for phpBB 2.x and then for phpBB 3.1 and 3.2, but then updated further by S. McCandlish to work properly in phpBB 3.3.x and to fix some bugs and misfeatures.

## Features
### Overhaul for phpBB 3.3.x

- Some tweaks to comply with phpBB 3.3.x directory structure and coding standards.
- Implemented fixes by original developer 3D-I, which existed in a 2020 branch but were never merged into the main codebase.
- Fixed issue where exclusion of Founders didn't work if Admins were included, because Founders are also Admins.
- Fixed bug in which "just use the last month's stats" logic for calculating the TPotM was also applied to Hall of Fame rendering, which both ignored recent activity and confusingly claimed in the listing that all these users had not logged in for a month.
- Enabled inclusion of Founders, Admins, and Mods in Hall of Fame listing even if excluded as Top Poster of the Month candidates.
- Textual cleanup (normal English capitalization and punctuation, etc.)

### Original features retained and sometimes improved

- Display a _Top Poster of the Month_ (TPotM) on your phpBB board, as well as a top-posters _Hall of Fame_ (HoF) page, with mini-profiles.
- Founders, Admins/Moderators, and banned users can be selectively excluded via ACP panel.
- The (non-excluded) poster with the max number of posts made in the current month's timespan will win.
- Custom-cached data management is in the extension's ACP module, along with a bunch of options (including logs).
- The TPotM's profile link complies with the "Can view profile" native permissions of users.
- Provided is a customisable viewport which contains the HoF (top posters ever) since the board's start date until the last minute of the previous month
- The current TPotM lies in the present month's stats.
- Multiple template locations.
- Compatible with Default Avatar Extended (DAE).

## Installation

Copy the extension to `/ext/threedi/tpotm` in your phpBB installation's directory.

Go to "ACP" &gt; "Customise" &gt; "Extensions" and enable the "3Di - Top Poster of the Month" extension.

If you already had an old version installed, it is advsiable to disable it first, remove its files (not its database entries), install the new version, enable it, and purge the board cache.

## Donations
Your contribution motivates the improvement of this free software and the creation of more.

Support the phpBB 3.3.x redeveloper SMcCandlish: [![ko-fi](https://ko-fi.com/img/githubbutton_sm.svg)](https://ko-fi.com/SMcCandlish)

Support the original phpBB 3.1.x–3.2.x developer 3D-I: [![paypal](https://www.paypalobjects.com/en_US/GB/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=ZLN6KTV2WQSRN)

## Screenshot of the Hall of fame (viewport)
![hall_full_screen_rc5](https://user-images.githubusercontent.com/480857/31104568-0cc1d628-a7de-11e7-877f-59bf32c534d4.png)

## Known issues and to-do list

- It probably makes sense to undo merging of Admins and Mods into a single pseudo-category; there seems to be no reason for this, and many users of the extension would probably prefer to distinguish, e.g by allowing Mods as TPotM candiates but not Admins (incl. Founders).
- Could also distinguish between Global Mods (basically sub-Admins) and Forum Mods (with authority only over a particular set of topics).

## License

GPL-2.0-only (license.txt)

## Original version's development proudly powered by [![Jetbrains](https://user-images.githubusercontent.com/480857/38287180-982983fc-37c9-11e8-9634-02e1ea1632c8.png)](https://www.jetbrains.com/)
