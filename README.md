# LMS ENEA Power Outages plugin

Shows power outages in areas served by ENEA.

![](enea-power-outages.png?raw=true)

## Requirements

Installed [LMS](https://lms.org.pl/) or [LMS-PLUS](https://lms-plus.org) (recommended).

## Installation

* Copy files to `<path-to-lms>/plugins/`
* Run `composer update` or `composer update --no-dev`
* Go to LMS website and activate it `Configuration => Plugins`

## Configuration

Go to https://www.wylaczenia-eneaoperator.pl/ search for the area you are interested in then copy link from [RSS](https://en.wikipedia.org/wiki/RSS) icon.

Go to `<path-to-lms>/?m=configlist` then paste it to `enea.feed_url`. Otherway default value `https://www.wylaczenia-eneaoperator.pl/rss/rss_unpl_7.xml` will be used.

## Donation

* Bitcoin (BTC): bc1qvwahntcrwjtdp0ntfd0l6kdvdr9d9h6atp6qrr
* Ethereum (ETH): 0xEFCd4b066195652a885d916183ffFfeEEd931f40
