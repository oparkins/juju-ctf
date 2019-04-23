FROM ubuntu:18.04

RUN apt update; apt install -y openssh-server netcat

RUN useradd -ms /bin/bash billy
RUN useradd -ms /bin/bash sue
RUN useradd -ms /bin/bash bob

ADD billy.flag /home/billy/
ADD billy.pub /home/billy/.ssh/authorized_keys
RUN chown -R billy:billy /home/billy
RUN chmod 700 /home/billy/.ssh/authorized_keys

ADD sue.flag /home/sue/
ADD sue.pub /home/sue/.ssh/authorized_keys
RUN chown -R sue:sue /home/sue
RUN chmod 700 /home/sue/.ssh/authorized_keys

RUN mkdir /run/sshd

CMD ["/usr/sbin/sshd", "-D"]
