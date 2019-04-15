# Require any additional compass plugins here.

# Set this to the root of your project when deployed:
http_path = ""
css_dir = "0__0"
sass_dir = "0__0"
images_dir = "x__x"
javascripts_dir = "*__*"

output_style = :compressed
line_comments = false

require "fileutils"

# This is where the magic happens, nothing too fancy though...
on_stylesheet_saved do |file|
  if File.exists?(file)
    filename = File.basename(file, File.extname(file))
    File.rename(file, css_dir + "/" + filename + ".min" + File.extname(file))
  end
  `compass compile -c config_debug.rb --force`
end

# You can select your preferred output style here (can be overridden via the command line):
# output_style = :expanded or :nested or :compact or :compressed

# To enable relative paths to assets via compass helper functions. Uncomment:
# relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
# line_comments = false


# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass sass scss && rm -rf sass && mv scss sass

# css_dir = "0__0" # by Compass.app
# sass_dir = "0__0" # by Compass.app
# images_dir = "x__x" # by Compass.app
# output_style = :expanded # by Compass.app
# relative_assets = false # by Compass.app
# line_comments = true # by Compass.app
# sass_options = {:debug_info=>false} # by Compass.app
# sourcemap = false # by Compass.app
