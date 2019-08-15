#### Project composer.json:
```
"autoload": {
    "psr-4": {
        "App\\": "app/",
        "iAdamBrown\\Flash\\": "packages/iadambrown/flash/src"
    },
    "files": [
        "packages/iadambrown/flash/src/functions.php"
    ]
},
```

##### (IF using via Composer/Packagist) 
####Package composer.json (then remove above):
```
"autoload": {
    "psr-0": {
        "iAdamBrown\\Flash": "src/"
    },
    "files": [
        "src/functions.php"
    ]
},

```
