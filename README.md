<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installation Steps

[1]: https://github.com/DiossmerVillamizar/school/#Laravel-Install
[2]: https://github.com/DiossmerVillamizar/school/#install-composer-versionupdate
[3]: https://github.com/DiossmerVillamizar/school/#Solution-vendor-lock-in-version-stabled
[4]: https://github.com/DiossmerVillamizar/school/#install-npm-versionupdate
[5]: https://github.com/DiossmerVillamizar/school/#Solution-npm-lock-in-version-stabled-or-Vulnerabilities
[6]: https://github.com/DiossmerVillamizar/school/#laravel-mix-use-file-webpackmixjs
[7]: https://github.com/DiossmerVillamizar/school/#Create-view-auth
[8]: https://github.com/DiossmerVillamizar/school/#Git
[9]: https://github.com/DiossmerVillamizar/school/#Solution-vulnerabilities-to-breaking-changes
[10]: https://github.com/DiossmerVillamizar/school/#npm-install-gets-stuck-at-fetchMetada
[11]: https://github.com/DiossmerVillamizar/school/#packagejson
1. [Laravel Install][1]
2. [Install Composer version(update)][2]
   * [Solution vendor lock in version stabled][3]
3. [Install npm version(update)][4]
   * [Solution npm lock in version stabled or Vulnerabilities][5]
4. [Laravel Mix use file webpack.mix.js][6]
5. [Create view auth][7]
6. [Git][8]
7. [Solution vulnerabilities to breaking changes][9]
8. [npm install gets stuck at fetchMetada][10]
9. [package.json][11]
---
## Laravel Install
```diff
+ composer global require laravel/installer
+ composer create-project laravel/laravel example-app
```
_ _ _
## Git
- Identify the file with:
    
      git init
- Adds the remote connection to git:

      git remote add origin https://github.com/UserDefault/school.git
- Adds all files with (.) or (-a):

      git add .
      git add -a
- Adds a comment to the file:

      git commit -m "first commit"
- If "NOT" we have uploaded the commit to our remote repository (no push):

      git reset --hard HEAD~1
> **--head:** With this option we are indicating that we go back to the HEAD~1 comit and lose all subsequent commits. HEAD~1 is a shortcut to point to the previous commit we are at. BE CAREFUL, with the -head option, because as I said all the commits after the commit to which we indicate are deleted.

    git reset --soft HEAD~1 
> **--soft:** With this option we are indicating that we go back to the commit HEAD~1 and we do not lose the changes of the subsequent commits. All changes will appear as pending for commit.

- If we have uploaded the commit to our remote repository (we have performed push):
> In case we want to delete a commit that we have already uploaded to the remote server, the best option is to make a new commit that deletes the commit we want to remove using the revert command. This way any user that has updated the content of the remote repository can obtain the change by simply doing pull. Therefore to delete the last commit taking into account that the commit is uploaded in a remote repository we must use:
      
    git revert HEAD
- Upload the file to the Git repository:
  
      git push -u origin main
      git push -u origin master

- To add a new branch is:

      git branch <NameBranch>
- Delete new or old branch is:
      
      git branch -D <NameBranch>
      git branch --delete <NameBranch>
- You can delete a remote branch using:

      git push origin --delete <NameBranch>
      git push origin -d <NameBranch>
- To change new branch is:

      git checkout -b <NameBranch>
- To change branch is:
    
      git checkout <NameBranch>
- To join project from a branch is:

      git merge <NameBranch>

- Wiew all commits:

      git log
- Wiew all remote:

      git remote
- Wiew all branch:

      git branch
_ _ _
## Install Composer version(update)
- Install composer:

      composer install
#### Solution vendor lock in version stabled
- Delete file composer.lock:
  
      sudo rm -rf composer.lock
- Delete folder vendor:
  
      sudo rm -rf vendor
- Clear cache in composer:
    
      composer clear
      composer clearcache
- We re-install composer:
  
      sudo composer install
- compositor resume:
      
      compositor dump-autoload
_ _ _
## Install npm version(update)
- Install npm:
  
      sudo npm install
- The **n** module facilitates version management:

      sudo npm install n -g
      npm install npm -g
- For the latest stable version:

      sudo n stable
- For the latest version:

      sudo n latest
---
## Solution vulnerabilities to breaking changes

- Package update:
	
      sudo npm audit fix
      sudo npm audit fix --force
---
#### Solution npm lock in version stabled or Vulnerabilities
- Delete file package-lock.json:
  
      sudo rm -rf package-lock.json
- Delete folder node_modules:
  
      sudo rm -rf node_modules
- clear cache in npm:
      
      npm cache clear --force
- We re install npm:
  
      npm install
---
## Create view auth
- We mount the user interface:
    
      composer require laravel/ui
- Select an interface framework:
  
      php artisan ui bootstrap
      php artisan ui vue
      php artisan ui react
- Select an user interfaces of fronted:
      
      php artisan ui bootstrap --auth
      php artisan ui vue --auth
      php artisan ui react --auth
- We start with the development of IU:
      
      npm install
      //then
      npm run dev
---
## Laravel Mix use file webpack.mix.js
- Change the word const to let:
```js
const mix = require('laravel-mix');
      mix.js('resources/js/app.js', 'public/js')
            .postCss('resources/css/app.css', 'public/css', [
            //
      ]);
```
For
```js
let mix = require('laravel-mix');
      mix.js('resources/js/app.js', 'public/js')
            postCss('resources/css/app.css', 'public/css');
```
---
## npm install gets stuck at fetchMetada
- This is how I resolved this after spending half an hour:
```diff
# npm config set registry "http://registry.npmjs.org"
- npm config set registry http://registry.npmjs.org/ --global
+ npm install --verbose
! npm cache clear --force
@@ npm install @@
```
---
## package.json
- Modific the version devDependencies with (*):
```json
{
      "private": true,
      "scripts": {
      "dev": "npm run development",
      "development": "mix",
      "watch": "mix watch",
      "watch-poll": "mix watch -- --watch-options-poll=1000",
      "hot": "mix watch --hot",
      "prod": "npm run production",
      "production": "mix --production"
      },
      "devDependencies": {
      "axios": "^0.21",
      "laravel-mix": "^6.*",
      "lodash": "^4.*",
      "postcss": "^8.*",
      }
}
```
---
## Api
- Api controller:

      php artisan make:controller <ControllerName> --api.
- Api model:

      php artisan make:model <Name>
- For more information about artisan in the code we use "help":
```code      
php artisan help make:cast                   
                 make:channel                
                 make:command                
                 make:component              
                 make:controller             
                 make:event                  
                 make:exception              
                 make:factory                
                 make:job                    
                 make:listener               
                 make:mail                   
                 make:middleware             
                 make:migration              
                 make:model                  
                 make:notification           
                 make:observer               
                 make:policy                 
                 make:supplier               
                 make:request                
                 make:appeal               
                 make:rule                   
                 make:seeder                 
                 make:test
```