<p align="center">
    <img src="https://www.codetiv.cz/static/logo_white.png" height="40" alt="Logo" />
</p>

## How to use

### Creating new project
```bash
composer create-project codetivsro/page-generator
```

### Building frontend stuff
<p>First you need to install all the new packages.</p>

```bash
npm install
```
<p>After that you can build all resources with this command:</p>

```bash
npm run build
```

### Generating static pages
Then you are able to build all pages with this simple command
```bash
./vendor/bin/generator build
```
or clean whole generated site.
```bash
./vendor/bin/generator cleanup
```
