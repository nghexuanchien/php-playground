# October CMS Sample

This is an sample for how October CMS could helps  us to build a website

  - Bloging feature with plugin [Blog by RainLab](https://github.com/rainlab/blog-plugin)
  - Contact Form feature with plugin [Magics Form](https://github.com/skydiver/october-plugin-forms) 
  - Custom page layout
  - Custom dynamic content type (e.g Products)

# Setup
In working project directory run following commands:

```sh
$ docker-compose up -d
$ docker-compose exec web php artisan october:up
```
# See it works
### Front end
  - Access [http://localhost:8088](http://localhost:8088)
### Back end
  - Access [http://localhost:8088/backend](http://localhost:8088/backend) with credential `admin/admin`
