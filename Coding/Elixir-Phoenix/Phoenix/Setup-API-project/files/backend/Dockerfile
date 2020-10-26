# Elixir + Phoenix

FROM elixir:latest

# Install debian packages
RUN apt-get clean && apt-get -y update && apt-get install -y locales && locale-gen en_US.UTF-8
RUN apt-get install --yes build-essential inotify-tools cron nano mc htop

# Install Phoenix packages
RUN mix local.hex --force
RUN mix local.rebar --force
RUN mix archive.install --force https://github.com/phoenixframework/archives/raw/master/phx_new.ez

# Install node
RUN curl -sL https://deb.nodesource.com/setup_8.x -o nodesource_setup.sh
RUN bash nodesource_setup.sh
RUN apt-get install nodejs

# Add crontab file in the cron directory
ADD crontab /app/crontab

# Move it to system crons.
RUN crontab /app/crontab

# Setup all required to call tasks from crontab.
RUN ln -s /usr/local/bin/elixir /usr/bin/elixir
RUN ln -s /usr/local/bin/mix /usr/bin/mix
RUN ln -s /usr/local/bin/erl /usr/bin/erl
RUN service cron start

WORKDIR /app
EXPOSE 4000

## First time.
CMD tail -f /dev/null

## Next time.
# CMD ["./run.sh"]