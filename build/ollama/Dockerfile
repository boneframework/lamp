# Dockerfile for claudecode service
# Use a lightweight base image
FROM ollama/ollama:latest

RUN apt-get update && apt-get install -y curl bash
USER ubuntu
RUN curl -fsSL https://claude.ai/install.sh | bash
RUN echo 'export PATH="$HOME/.local/bin:$PATH"' >> /home/ubuntu/.bashrc

# Set working directory
WORKDIR /app


