# note: this should never truly be refernced since we are using relative assets
http_path = "htdocs"
css_dir = "../../../public/css"
sass_dir = "../scss"
images_dir = "../../../public/images"
javascripts_dir = "../js"

relative_assets = false

output_style = :expanded
# output_style = (environment == :development) ? :expanded : :compressed
line_comments = (environment == :development) ? true : false

sass_options = {:sourcemap => true}
# compass watch -e development
