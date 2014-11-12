require 'open-uri'
require 'net/http'

http = Net::HTTP.new(ARGV[0], ARGV[1])
req = Net::HTTP::Get.new("/#{ARGV[2]}", {'User-Agent' => 'key: SIT-DEADBEEF'})
response = http.request(req)