# Shopware Test (Joseph Molinas)

## Build Setup

```bash
# install docker

# build php image
$ docker-compose build --no-cache

# start instance
$ docker-compose up -d
```

## Minimal Offcanvas Plugin
* Second off-canvas template that only displays the last added item to the cart. This template should automatically be used whenever an item is added to the cart.
When opening the off-canvas by clicking the cart icon in the header, the normal template should be used, that displays all items in the cart.
* With the remaining space in the off-canvas, we want to display a cross-selling group to try and boost sales. Added checkbox in each cross selling group to show in offcanvas