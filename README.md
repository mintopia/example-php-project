# Example PHP Application

This repository contains an example PHP application with Docker compose configuration for common tools.

This directory is mounted into the tool docker containers at `/app` and all tooling is configured to expect this location.

The tools themselves use a standard 1and1internet php build environment image that is maintained. In addition we add xdebug to it for IDE debugging.

Finally, an example GitHub action workflow is included to build and run PHP Unit and PHPCS on push.

## Usage

All the tools can be run using `docker-compose` and work on any x64 platform that can run docker-compose.

### Composer

You can use composer with the following docker-compose command:

```bash
$ docker-compose run --rm composer <command>
```

### PHPUnit

PHP Unit is available and configured with `phpunit.xml`. It will execute all tests within the `tests` directory.

```bash
$ docker-compose run --rm phpunit
```

### Formatting and Linting

PSR12 formatting can be checked using `phpcs` and any fixes can be run using `phpcbf`. The configuration for this is using `.phpcs.xml`.

```bash
$ docker-compose run --rm phpcs
```
```bash
$ docker-compose run --rm phpcbf
```

### IDE Interpreter

If your IDE requires a PHP interpreter and can use docker-compose services, configure it to use the `debug-cli` service.

## License

This project is licensed under the MIT License.

Copyright (c) 2021 Jessica Smith

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
