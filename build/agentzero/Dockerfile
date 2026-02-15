FROM agent0ai/agent-zero:v0.9.8
RUN apt-get update

# Install nvm (Node Version Manager)
RUN curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.7/install.sh | bash

# Set up environment variables for nvm and pnpm
ENV NVM_DIR=/root/.nvm
ENV PNPM_HOME=/root/.local/share/pnpm
ENV PATH=$PNPM_HOME:$NVM_DIR/versions/node/v24.13.0/bin:$PATH

# Load nvm and install latest LTS Node.js
RUN . "$NVM_DIR/nvm.sh" && \
    nvm install --lts && \
    nvm use --lts && \
    nvm alias default lts/*

# Setup PNPM
RUN wget -qO- https://get.pnpm.io/install.sh | ENV="$HOME/.bashrc" SHELL="$(which bash)" bash -

# install docker so we can call other containers from this one
RUN apt-get install -y docker.io

# Verify installations
RUN node --version  
# RUN pnpm --version 
# RUN nvm --version

