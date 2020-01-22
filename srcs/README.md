docker build -t ft_server .
(docker kill deb || 1) && (docker rm deb || 1) && docker run -d -p80:80 -p443:443 --name=deb ft_server