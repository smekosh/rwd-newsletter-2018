#!/usr/bin/env ruby

require 'premailer'
# require 'cgi'

unless ARGV.empty?
	newsletter_url = ARGV[0]
else
	puts "Please enter the newsletter.php preview URL including query string:"
	newsletter_url = STDIN.gets
end


puts "Enter string to append to filename (or press ENTER to skip):"
filename_extra = STDIN.gets


# make the base filename using the date and CLI input
time = Time.new
filename = "#{time.strftime("%Y-%m-%d")}_newsletter_#{filename_extra.chomp}"


# CGI::parse('param1=value1&param2=value2&param3=value3')

options = {
	:warn_level => Premailer::Warnings::POOR,
	:base_url => '',
	:escape_url_attributes => false,
	:input_encoding => 'UTF-8',
	:remove_classes => true,
	:remove_ids => true,
	:replace_html_entities => false
}


premailer = Premailer.new( newsletter_url, options )

# Write the plain-text output
# This must come before to_inline_css (https://github.com/premailer/premailer/issues/201)
File.open("output/#{filename}.txt", "w") do |fout|
  fout.puts premailer.to_plain_text
end

# Write the HTML output
File.open("output/#{filename}.html", "w") do |fout|
  fout.puts premailer.to_inline_css
end

# Output any CSS warnings
premailer.warnings.each do |w|
  puts "#{w[:message]} (#{w[:level]}) may not render properly in #{w[:clients]}"
end

exit
