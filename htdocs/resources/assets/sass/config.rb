# note: this should never truly be refernced since we are using relative assets
http_path = "/htdocs"
css_dir = "/htdocs/public/css"
sass_dir = "../scss"
images_dir = "/htdocs/public/images"
javascripts_dir = "../js"

relative_assets = true

output_style = (environment == :development) ? :expanded : :compressed
line_comments = (environment == :development) ? true : false

# compass watch -e development
