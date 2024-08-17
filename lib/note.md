
Technical Note

go to /etc/httpd/conf/httpd.conf  add this code
add logs directory manually otherwise server restart will throw error
sudo systemctl restart httpd

<VirtualHost *:80>
    ServerAdmin gobinda.genx@yahoo.in
    DocumentRoot /var/www/html/dishamovie/
    ServerName dishamovie.in
    ErrorLog /var/www/html/dishamovie/logs/disha-movie-error_log
    CustomLog /var/www/html/dishamovie/logs/disha-movie-common_log common
</VirtualHost>

<VirtualHost *:80>
    ServerAdmin contact@worlde.in
    DocumentRoot /var/www/html/worlde/
    ServerName worlde.in
    ErrorLog /var/www/html/worlde/logs/worlde-error_log
    CustomLog /var/www/html/worlde/logs/worlde-common_log common
</VirtualHost>

commands
7  sudo yum update -y

8  curl -fsSL https://get.docker.com -o get-docker.sh
9  sudo yum install docker -y
10  docker -v
11  sudo systemctl status docker
12  sudo systemctl start docker
13  sudo systemctl status docker

14  git -v
15  sudo yum install git -y
16  git -v

17  git config --global user.name "Gobinda Nandi"
18  git config --global user.email "gobinda.genx@yahoo.in"
21  git config -l

26  ssh-keygen -t rsa 
28  cd /home/ec2-user/.ssh/
30  sudo chmod 400 id_rsa.pub 
31  cat id_rsa.pub 

32  cd /home/ec2-user
34  git clone -b docker git@github.com:inandi/dishamovie.git
35  cd dishamovie/

37  sudo docker build -t dishamovie . 
39  sudo docker images
40  sudo docker run -p 7699:80 --name dishamovie dishamovie

41  sudo docker run -v $(pwd):/usr/share/nginx/html -d -p 7699:80 --name dishamovie  dishamovie

43  sudo docker container ls
51  sudo docker run -v $(pwd):/usr/share/nginx/html -d -p 7699:80  dishamovie