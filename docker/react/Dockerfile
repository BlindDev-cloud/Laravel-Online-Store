FROM node:latest

# Set up work directory
WORKDIR /app

# Copy project into a container
Copy ./react/ .

# Install dependences
RUN npm install

# Expose the port
EXPOSE 5173

CMD ["npm", "run", "dev"]
