\# Laboratorio Docker y Ansible



\## Objetivo



Crear un laboratorio con dos servidores Ubuntu utilizando Docker y administrarlos mediante Ansible.



El playbook realiza las siguientes tareas:



\- Muestra el nombre de cada servidor.

\- Muestra el sistema operativo.

\- Crea el directorio `/tmp/ansible-demo`.

\- Crea el archivo `info.txt`.

\- Escribe el nombre del servidor y el sistema operativo.

\- Crea los directorios `logs`, `backup` y `config` mediante un loop.

\- Muestra un mensaje cuando el sistema operativo es Ubuntu.



\## Iniciar los contenedores



```bash

docker compose up -d



